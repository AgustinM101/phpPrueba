<?php 

use Src\Service\Category\CategoriesSearcherService;

final readonly class CategoriesGetController {

    private CategoriesSearcherService $service;

    public function __construct() {
        $this->service = new CategoriesSearcherService();
    }

    public function start(): void 
    {
        $response = $this->service->search();
        echo json_encode($this->filterResponses($response), true);
    }

    private function filterResponses(array $responses): array
    {
        $result = [];

        foreach ($responses as $response) {
            $result[] = [
                "id" => $response->id(),
                "name" => $response->name(),
                "code" => $response->code()
            ];
        }

        return $result;
    }
}
