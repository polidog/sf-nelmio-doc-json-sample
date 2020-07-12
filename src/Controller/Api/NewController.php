<?php

namespace App\Controller\Api;

use Ptyhard\JsonSchemaBundle\Annotations\SchemaFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Swagger\Annotations as SWG;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/new", methods={"POST"})
 */
class NewController
{
    /**
     * @SWG\Parameter(
     *     name="new",
     *     in="body",
     *     schema=@SWG\Schema(ref="#definitions/new_project")
     * )
     *
     * @SWG\Response(
     *     response=201,
     *     description="create resource."
     * )
     *
     * @SWG\Tag(name="project")
     * @SchemaFile("new.json", type={"request"})
     */
    public function __invoke(Request $request)
    {
        $name = $request->request->get('name');
        // TODO add project code.

        return new JsonResponse(['status' => 'ok']);
    }
}