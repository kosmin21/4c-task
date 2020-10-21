<?php

namespace App\Http\Controllers\Api\Animal;

use App\Exceptions\Animal\AnimalTypeNotFoundException;
use App\Http\Controllers\Controller;
use App\Http\Requests\PutBreedRequest;
use App\Services\AnimalService;
use Illuminate\Http\JsonResponse;

class PutBreedHandler extends Controller
{

    /**
     * @param PutBreedRequest $request
     * @param string $animal_type
     * @param int $id
     * @return JsonResponse
     * @throws AnimalTypeNotFoundException
     */
    public function __invoke(PutBreedRequest $request, string $animal_type, int $id)
    {
        $service = new AnimalService();
        $repository = $service->getAnimalRepository($request['animal_type']);
        $breed = $repository->getById($id);

        $breed->fill($request->all());
        $breed->save();

        return $this->response->respond($breed->fresh());
    }
}
