<?php
use Cake\Error\ExceptionRenderer;

class AppExceptionRenderer extends ExceptionRenderer
{
    public function missingWidget($error)
    {
        $response = $this->controller->response;

        return $response->withStringBody('Oops that widget is missing.');
    }
    public function notFound($error)
    {
        echo "Do something with NotFoundException objects.";
    }
}
?>