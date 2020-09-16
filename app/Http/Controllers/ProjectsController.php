<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Resources\ProjectsResource;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $projects=Project::all();

    return view('welcome')->with('projects', $projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description'=>'required|max:255',
            'image'=>'required',
            'tech_stack'=>'required|max:255'

        ]);



$imagepath=$request->file('image')->store('images','s3');
Storage::disk('s3')->setVisibility($imagepath,'public');
//\$path = Storage::putFile('avatars', $request->file('avatar'));
// return $imagepath;

        // $project =create($input);
       $project=new Project();
       $project->title=$request->input('title');
       $project->description=$request->input('description');
       $project->imageName=Basename($imagepath);
       $project->imgUrl=Storage::disk('s3')->url($imagepath);
       $project->tech_stack=$request->input('tech_stack');
       $project->save();

       return redirect('/projects')->with('success', 'Post Created');

        // return (new ProjectsResource($project))
        //     ->response()
        //     ->setStatusCode(Response::HTTP_CREATED);//201
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        return view('portfolio.show')->with('project', $project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('portfolio.edit')->with('project', $project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description'=>'required|max:255',
            'images'=>'required',
            'tech_stack'=>'required|max:255'
        ]);
        $input = $request->all();

        $project =update($input);
        return (new ProjectsResource($project))
            ->response()
            ->setStatusCode(Response::HTTP_OK);//201
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project ->delete();
        return response(['message' => 'deleted'],Response::HTTP_NO_CONTENT);//204
    }
}
