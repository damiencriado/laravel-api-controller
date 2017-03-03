<?php

namespace ItsDamien\Api;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

trait ApiController
{
    /**
     * @var int
     */
    protected $statusCode = Response::HTTP_OK;

    /**
     * @param string $message
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondNotFound($message = 'Not Found')
    {
        return $this->setStatusCode(Response::HTTP_NOT_FOUND)->respondWithError($message);
    }

    /**
     * @param $message
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondWithError($message)
    {
        return $this->respond([
            'error' => [
                'data'        => $message,
                'status_code' => $this->getStatusCode(),
            ],
        ]);
    }

    /**
     * @param string|array $data
     * @param array $headers
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function respond($data, array $headers = [])
    {
        return new JsonResponse($data, $this->getStatusCode(), $headers);
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param $statusCode
     *
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * @param string|array $message
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondBadRequest($message = 'Bad Request')
    {
        return $this->setStatusCode(Response::HTTP_BAD_REQUEST)->respondWithError($message);
    }

    /**
     * @param string|array $message
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondServerError($message = 'Server Error')
    {
        return $this->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR)->respondWithError($message);
    }

    /**
     * @param string|array $message
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondConflict($message = 'Conflict')
    {
        return $this->setStatusCode(Response::HTTP_CONFLICT)->respondWithError($message);
    }

    /**
     * @param string|array $message
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondUnprocessable($message = 'Unprocessable Entity')
    {
        return $this->setStatusCode(Response::HTTP_UNPROCESSABLE_ENTITY)->respondWithError($message);
    }

    /**
     * @param string|array $message
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondUnauthorized($message = 'Unauthorized')
    {
        return $this->setStatusCode(Response::HTTP_UNAUTHORIZED)->respondWithError($message);
    }

    /**
     * @param string|array $message
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondForbidden($message = 'Forbidden')
    {
        return $this->setStatusCode(Response::HTTP_FORBIDDEN)->respondWithError($message);
    }

    /**
     * @param string|array $data
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondCreated($data = null)
    {
        return $this->setStatusCode(Response::HTTP_CREATED)->respond($data);
    }
}
