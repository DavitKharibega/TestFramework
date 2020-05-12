<?php


class HomeController
{
    public function contact(IRequest $request, Router $router)
    {


        return $router->getViewContent('contact',[
            'errors' => [],
            'data' => []
        ]);
    }



    public function postContact(IRequest $request, Router $router)
    {
            //Simulate email sending
            $data = $request->getBody();
            $email = $data['email'];
            $errors = [];
            if (!$email){
                $errors['email'] = 'გთხოვთ შეავსოთ ველი';
            }

            return $router->getViewContent('contact',['errors' => $errors,'data' => $data]);
        }

}