<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use InvalidArgumentException;
use Throwable;

class Handler extends ExceptionHandler
{
    // Diğer kodlar...

    public function render($request, Throwable $exception)
    {
        if ($this->isHttpException($exception)) {
            $statusCode = $exception->getStatusCode();

            if (view()->exists("errors.{$statusCode}")) {
                return response()->view("errors.{$statusCode}", [], $statusCode);
            }
        }

        // InvalidArgumentException hatalarını yakala
        if ($exception instanceof InvalidArgumentException) {
            // Hatanın nasıl işleneceğini burada belirleyin
            // Örneğin özel bir hata sayfası veya JSON yanıtı dönebilirsiniz

            // Örnek olarak bir JSON yanıtı:
            return response()->json([
                'error' => 'Invalid argument provided',
                'message' => $exception->getMessage(),
            ], 400);

            // veya özel bir hata sayfası dönebilirsiniz
            // return response()->view('errors.invalid-argument', [], 400);
        }

        return parent::render($request, $exception);
    }
}
