<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class BVNVerification extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('verify.enter-bvn');
    }

    /**
     * Display the specified resource.
     */
    public function verify(Request $request)
    {
        $request->validate([
            'bvn' => ['required', 'string', 'size:11'],
            'consent' => ['required', 'string', 'in:on'],
        ]);

        $client = new Client();
        $response = "";
       
        try {
            $response = $client->post('https://api.sandbox.youverify.co/v2/api/identity/ng/bvn', [
                'headers' => [
                    'token' => env('YOU_VERIFY_API_KEY'),
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    // I will be hardcoding test ID here because I am using the sandboxed api
                    // 'id' => $request->bvn,
                    'id' => "11111111111",
                    'isSubjectConsent' => true,
                ],
            ]);

            $responseBody = $response->getBody()->getContents();
            return redirect()->route('verified')->with('response', $responseBody)->with('status', 'success');
        } catch (RequestException $e) {
            return redirect()->intended(RouteServiceProvider::HOME.'?error=1')->with('error', 'bvn verification failed');
        }
    }
}
