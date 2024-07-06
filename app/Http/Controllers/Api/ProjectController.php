<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     *
     *  @OA\Get(
     *      path="/api/projects",
     *      tags={"Project"},
     *      summary="Get all projects",
     *      @OA\Response(
     *          response=200,
     *          description="Success"
     *      )
     *  )
     *
     */

    public function index() {
        $projects = Project::with(['technologies', 'type'])->paginate(8);

        $data = [

            'results' => $projects,
            'success' => true,
        ];
        return response()->json($data);
    }

    /**
     *
     *  @OA\Get(
     *      path="/api/projects/{project}",
     *      tags={"Project"},
     * 
     *         @OA\Parameter(
     *         name="project",
     *         in="path",
     *         required=true,
     *         description="SLUG of the project",
     *         @OA\Schema(type="string")
     *     ),
     * 
     *      summary="Get single project by slug",
     *      @OA\Response(
     *          response=200,
     *          description="Success"
     *      )
     *  )
     *
     */

    public function show(string $project) {
       // dd($project);

         $project = Project::with(['technologies', 'type'])->where('slug', $project)->first();

         if(!$project) {
            return response()->json([], 404);
         }

        $data = [

             'results' => $project,
             'success' => true,
        ];
        return response()->json($data);

    }

    /**
     *
     *  @OA\Post(
     *      path="/api/projects",
     *      tags= {"Project"},
     *      summary="Insert new project",
     *      @OA\Response(
     *          response=200,
     *          description="Success"
     *      ),
     *      @OA\RequestBody(
     *          @OA\MediaType(
     *              mediaType="application/x-www-form-urlencoded",
     *              @OA\Schema(
     *                  @OA\Property(property="name", type="string"),
     *                  @OA\Property(property="description", type="string")
     *              )
     *          )
     *      )
     *  )
     *
     **/

    public function store() {

    }


    /**
     * @OA\Put(
     *     path="/api/project/{id}",
     *     tags={"Project"},
     *     summary="Update project",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID of the project to update",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success"
     *     ),
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/x-www-form-urlencoded",
     *             @OA\Schema(
     *                 @OA\Property(property="name", type="string"),
     *                 @OA\Property(property="description", type="string")
     *             )
     *         )
     *     )
     * )
     */

    public function update($id) {

    }


    /**
     * @OA\Delete(
     *     path="/api/project/{id}",
     *     tags={"Project"},
     *     summary="Delete project",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID of the project to delete",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success"
     *     )
     * )
     */

    public function destroy($id) {

    }

}
