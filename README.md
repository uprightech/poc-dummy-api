# Dummy PoC Rest API 

## Description 
  This is a dummy Rest API used for a PoC that involves fetching (user related) data 
from an API that will then be passed onto a SAML SP in a SAML Assertion. This API contains 
exactly one endpoint and for the sake of simplicity does not rely on any authentication 
mechanism to secure the latter. It is written in PHP using the CodeIgniter 4 framework.

## Requirements 

  This is a PHP application. You need to have a server with Apache and 
PHP 7 and above installed. 

## Installation 
   Simply copy the project files in a directory accessible by your web server. 
Make sure the directories have the correct permissions, especially the `writable`
directory.

## Configuration 
   The only configuration to be done is in the file 
`app/Config/App.php`. Change the value of the PHP member variable `$baseURL` to
the URL you configured for this project on your webserver.

## API Endpoints 
   The only endpoint in this project is `/v1/userinfo/<username>` where `<username>`
is a placeholder for a username value. The supported http method is GET and the return 
type is a json object. It looks like this:
```
{
  "user": "<username>",
  "token": "some_token_value",
  "request_id": "some_request_id_value"
}
```
Implementation lives in the file `app/Controllers/Home.php`. 
