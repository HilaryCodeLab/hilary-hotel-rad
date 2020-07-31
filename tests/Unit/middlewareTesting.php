<?php

namespace Tests\Unit;

use App\Http\Middleware\AdminMiddleware;
use Illuminate\Http\Request;
use PHPUnit\Framework\TestCase;


class middlewareTesting extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = factory(App\User::class)->make(['is_admin' => true]);

        $this->actingAs($user);

        $request = Request::create('/admin', 'GET');

        $middleware = new AdminMiddleware;

        $response = $middleware->handle($request, function () {});

        $this->assertEquals($response, null);
    }

    public function admins_are_not_redirected()
    {
        $user = factory(User::class)->make(['is_admin' => true]);

        $this->actingAs($user);

        $request = Request::create('/admin', 'GET');

        $middleware = new AdminMiddleware;

        $response = $middleware->handle($request, function () {});

        $this->assertEquals($response, null);
    }
}
