<?php

namespace App\Http\Controllers\api2;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{

    protected UserService $userService;

    /**
    *@param UserService $userService
    */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(array(
            'message' => 'success',
            'data' => $this->userService->getAll(),
            'count' => collect($this->userService->getAll())->count(),
        ), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateUserRequest  $request
     * @return JsonResponse
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request): JsonResponse
    {
       return response()->json(array(
           'message' => "Suvvess",
           'user' =>  $this->userService->createUser($request->validated()),
       ), '200');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
