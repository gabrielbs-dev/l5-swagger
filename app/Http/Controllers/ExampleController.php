<?php

namespace App\Http\Controllers;

/**
 * @OA\Info(
 *     title="My API",
 *     version="1.0.0",
 *     description="This is a sample API",
 *     @OA\Contact(
 *         email="support@example.com"
 *     ),
 *     @OA\License(
 *         name="MIT",
 *         url="https://opensource.org/licenses/MIT"
 *     )
 * )
 */
class ExampleController extends Controller
{
    /**
     * @OA\Get(
     *     path="/example",
     *     summary="Example endpoint",
     *     @OA\Response(
     *         response=200,
     *         description="Successful response"
     *     )
     * )
     */
    public function index()
    {
        //
    }
}