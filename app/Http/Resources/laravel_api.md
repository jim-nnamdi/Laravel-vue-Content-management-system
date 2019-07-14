## In Developing Api resources for laravel which would comm with various endpoints
## Follow the steps below to achieve this feat
## Firstly in the [Routes/api.php] file write a routing that calls the controller from which the Api would be culled

    ```
        Route::apiResource('/posts', 'PostController');
    ```
## Now create a resource to hold the files  which would be served

    ```
        php artisan make:resource PostController
    ```
## Now go to the File (app\http\resources) > PostCollection

public function xxx(){
    return $array[
        'id' => $this->id,
        'title' => $this->title,
        'body' => $this->body,
        ....
    ];
}