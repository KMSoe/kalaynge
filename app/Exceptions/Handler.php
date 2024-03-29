<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        $this->renderable(function (Exception $e, Request $request) {
            if ($request->is('api/*')) {
                if ($e instanceof NotFoundHttpException) {
                    return response()->json([
                        'status' => false,
                        'message' => 'Not Found',
                    ], 404);
                } else if ($e instanceof AuthenticationException) {
                    return response()->json([
                        'status' => false,
                        'message' => 'Not Authenticated',
                    ], 401);
                }else if ($e instanceof AuthorizationException) {
                    return response()->json([
                        'status' => false,
                        'message' => 'No Access',
                    ], 401);
                } else if ($e instanceof ModelNotFoundException) {
                    return response()->json([
                        'status' => false,
                        'message' => 'Not Found',
                    ], 404);
                }
                // return response()->json([
                //     'status' => false,
                //     'message' => 'Fail'
                // ], 400);
            }
        });
    }
}
