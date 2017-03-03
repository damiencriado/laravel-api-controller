<?php

namespace ItsDamien\Api\Tests;

class ExampleTest extends \PHPUnit_Framework_TestCase
{
    use \ItsDamien\Api\ApiController;

    public function testRespond()
    {
        $expected = json_encode('Message');
        $actual = $this->respond('Message');
        $this->assertJsonStringEqualsJsonString($expected, $actual->getContent());
        $this->assertEquals(200, $actual->getStatusCode());
    }

    public function testRespondCreated()
    {
        $expected = json_encode('Created');
        $actual = $this->respondCreated('Created');
        $this->assertJsonStringEqualsJsonString($expected, $actual->getContent());
        $this->assertEquals(201, $actual->getStatusCode());
    }

    public function testRespondNotFound()
    {
        $expected = json_encode(['error' => [
            'data'        => 'Not Found',
            'status_code' => 404,
        ]]);
        $actual = $this->respondNotFound('Not Found');
        $this->assertJsonStringEqualsJsonString($expected, $actual->getContent());
        $this->assertEquals(404, $actual->getStatusCode());
    }

    public function testRespondBadRequest()
    {
        $expected = json_encode(['error' => [
            'data'        => 'Bad Request',
            'status_code' => 400,
        ]]);
        $actual = $this->respondBadRequest('Bad Request');
        $this->assertJsonStringEqualsJsonString($expected, $actual->getContent());
        $this->assertEquals(400, $actual->getStatusCode());
    }

    public function testRespondServerError()
    {
        $expected = json_encode(['error' => [
            'data'        => 'Server Error',
            'status_code' => 500,
        ]]);
        $actual = $this->respondServerError('Server Error');
        $this->assertJsonStringEqualsJsonString($expected, $actual->getContent());
        $this->assertEquals(500, $actual->getStatusCode());
    }

    public function testRespondConflict()
    {
        $expected = json_encode(['error' => [
            'data'        => 'Conflict',
            'status_code' => 409,
        ]]);
        $actual = $this->respondConflict('Conflict');
        $this->assertJsonStringEqualsJsonString($expected, $actual->getContent());
        $this->assertEquals(409, $actual->getStatusCode());
    }

    public function testRespondUnprocessable()
    {
        $expected = json_encode(['error' => [
            'data'        => 'Unprocessable',
            'status_code' => 422,
        ]]);
        $actual = $this->respondUnprocessable('Unprocessable');
        $this->assertJsonStringEqualsJsonString($expected, $actual->getContent());
        $this->assertEquals(422, $actual->getStatusCode());
    }

    public function testRespondUnauthorized()
    {
        $expected = json_encode(['error' => [
            'data'        => 'Unauthorized',
            'status_code' => 401,
        ]]);
        $actual = $this->respondUnauthorized('Unauthorized');
        $this->assertJsonStringEqualsJsonString($expected, $actual->getContent());
        $this->assertEquals(401, $actual->getStatusCode());
    }

    public function testRespondForbidden()
    {
        $expected = json_encode(['error' => [
            'data'        => 'Forbidden',
            'status_code' => 403,
        ]]);
        $actual = $this->respondForbidden('Forbidden');
        $this->assertJsonStringEqualsJsonString($expected, $actual->getContent());
        $this->assertEquals(403, $actual->getStatusCode());
    }
}
