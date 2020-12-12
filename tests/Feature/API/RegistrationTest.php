<?php


namespace Tests\Feature\API;


use App\Http\Controllers\API\AuthController;
use http\Client\Request;
use PHPUnit\Framework\TestCase;

class RegistrationTest extends TestCase
{
  public function CreateUserTest()
{
    $controller = new AuthController();
    $request = Request::create('/registration', 'POST', ['name']=> 'test');
    echo $request;
}
}
