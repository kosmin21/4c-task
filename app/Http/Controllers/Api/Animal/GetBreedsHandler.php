<?php

namespace App\Http\Controllers\Api\Animal;

use App\Exceptions\Animal\AnimalTypeNotFoundException;
use App\Http\Controllers\Controller;
use App\Http\Requests\GetBreedsRequest;
use App\Services\TheCatApiService;
use App\Services\TheDogApiService;
use Illuminate\Http\JsonResponse;
use App\Services\AnimalService;

class GetBreedsHandler extends Controller
{
    private TheDogApiService $the_dog_api_service;
    private TheCatApiService $the_cat_api_service;

    public function __construct(TheDogApiService $the_dog_api_service, TheCatApiService $the_cat_api_service)
    {
        parent::__construct();
        $this->the_dog_api_service = $the_dog_api_service;
        $this->the_cat_api_service = $the_cat_api_service;
    }

    /**
     * @param GetBreedsRequest $request
     * @return JsonResponse
     * @throws AnimalTypeNotFoundException
     */
    public function __invoke(GetBreedsRequest $request): JsonResponse
    {
        $service = new AnimalService();
        $repository = $service->getAnimalRepository($request['animal_type']);
        $breeds = $repository->getByName($request['name']);

        if (!($breeds->count() > 0)) {
            $matches = [];

            switch ($request['animal_type']){
                case 'dog':
                    $matches = $this->the_dog_api_service->getMatches($request['name']);
                    break;
                case 'cat':
                    $matches = $this->the_cat_api_service->getMatches($request['name']);
                    break;
            }

            $repository->saveFromExternalApi($matches);
        }

        $breeds = $repository->getByName($request['name']);

        return $this->response->respond($breeds);
    }

}
