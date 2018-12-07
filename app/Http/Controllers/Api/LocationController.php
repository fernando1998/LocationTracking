<?php

namespace App\Http\Controllers\Api;

use App\Point;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;


class LocationController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function setPoints(Request $request)
    {
        $response = [];
        $req = 'required';
        $rules = [
            'user_id' => $req,
            'lat' => $req,
            'long' => $req
        ];
        $messages = [
            'user_id.required' => 'El id del usuario es requerido',
            'lat.required' => 'La latitud es requerida',
            'long.required' => 'La longitud es requerida',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            $message = '';
            foreach ($validator->messages()->all() as $err) {
                $message .= $message == "" ? $err : ", \n$err";
            }

            $response['status'] = "error";
            $response['message'] = $message;

            return response()->json($response, 422);
        }

        try {
            $user = User::query()->findOrFail($request->user_id);

            $points = new Point;
            $points->user_id = $user->id;
            $points->lat = $request->lat;
            $points->lng = $request->long;
            $points->save();

            if ($points->wasRecentlyCreated) {
                $points = Point::whereUserId($user->id)
                    ->count();

                if ($points > 5) {
                    //Deberia eliminarse el primero ID: 1
                    $user->points()->first()->delete();
                }
            }

            $response['status'] = 'success';
            $response['message'] = 'Ubicación registrada';

            return response()->json($response, 200);
        } catch (\Exception $e) {
            Log::error("Error:" . $e->getMessage() . "------File:" . $e->getFile());
            $response['status'] = 'error';
            $response['message'] = $e->getMessage();

            return response()->json($response, 500);
        }
    }

    public function getPoints()
    {
        $points = Point::query()
            ->select('lat','lng')
            ->whereUserId(2)
            ->orderByDesc('created_at')
            ->limit(2)
            ->get();
        $markers = [];

        foreach ($points as $point) {
            $object = [
                'position' => ['lat' => floatval($point->lat), 'lng' => floatval($point->lng)]
            ];
            array_push($markers, $object);
        }
        $data = [
            'path' => $points->map(function ($point){
                $point->lat = floatval($point->lat);
                $point->lng = floatval($point->lng);
                return $point;
            }),
            'markers' => $markers
        ];
        Log::info(json_encode($data));
        return response()->json($data, 200);
    }
}
