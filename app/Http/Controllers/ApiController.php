<?php
/**
 * Created by IntelliJ IDEA.
 * User: nbin
 * Date: 6/29/15
 * Time: 12:33 PM
 */

namespace App\Http\Controllers;
use Symfony\Component\HttpFoundation\Response;


/**
 * Class ApiController
 * @package App\Http\Controllers
 */
class ApiController extends Controller{

    /**
     * @var int
     */
     protected $statusCode = 200;

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param mixed $statusCode
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * @param string $message
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function respondNotFound($message = 'Not Found')
    {
        return $this->setStatusCode(Response::HTTP_NOT_FOUND)->respondWithError($message);
    }

    /**
     * @param $data
     * @param array $headers
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function respond($data, $headers = [])
    {

        return response($data, $this->getStatusCode(), $headers);
    }

    /**
     * @param $message
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function respondWithError($message)
    {
        return $this->respond([
           'error' => [
               'message' => $message,
               'status_code' => $this->getStatusCode()
           ]
        ]);
    }
}