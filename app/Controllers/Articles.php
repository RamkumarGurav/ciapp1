<?php

namespace App\Controllers;

use App\Models\ArticleModel;
use App\Entities\Article;
use CodeIgniter\Exceptions\PageNotFoundException;

class Articles extends BaseController
{


  //{--------------PROPS--------------
  private ArticleModel $model;
  //--------------------------------------------------}


  //{--------------CONSTRUCT FUNC--------------
  public function __construct()
  {
    $this->model = new ArticleModel;
  }
  //--------------------------------------------------}


  //{-----------SHOW--------------

  //--FRONTEND PAGE
  public function index()
  {

    $data = $this->model->findAll();

    return view("Articles/index.php", ["articles" => $data]);
  }

  //--FRONTEND PAGE
  public function show($id)
  {
    $article = $this->getArticleOr404($id);
    return view("Articles/show", ["article" => $article]);

  }
  //--------------------------------------------------}






  //{--------------CREATE--------------

  //--FRONTEND PAGE
  public function new()
  {

    return view("Articles/new", ["article" => new Article]);

  }

  //--BACKEND ACTION
  public function create()
  {
    $article = new Article($this->request->getPost());
    $id = $this->model->insert($article);
    if ($id === false) {
      return redirect()->back()->with("errors", $this->model->errors())->withInput();
    }

    return redirect()->to("articles/$id")->with("message", "Article saved sucessfully.")->with("toastType", "text-bg-success");

  }
  //--------------------------------------------------}



  //{--------------UPDATE--------------

  //--FRONTEND PAGE
  public function edit($id)
  {
    $article = $this->getArticleOr404($id);


    return view("articles/edit", ["article" => $article]);

  }

  //--BACKEND ACTION
  public function update($id)
  {
    // Retrieve the article with the given ID or show a 404 error page if not found
    $article = $this->getArticleOr404($id);

    // Fill the article entity with the data from the POST request
    //here already existing values of articles are replaced/filled by new values from post method from request
    $article->fill($this->request->getPost());

    //bcz we have a extra input field for http post method so must unset that _method property
    $article->__unset("_method");


    // Check if any changes were made to the article
    if (!$article->hasChanged()) {
      // If no changes were made, redirect back with a message indicating nothing to update
      return redirect()->back()->with("message", "Nothing to Update")->with("toastType", "text-bg-warning");
    }

    // Attempt to save the updated article
    if (!$this->model->save($article)) {
      // If saving fails, redirect back with validation errors and input data
      return redirect()->back()->with("errors", $this->model->errors())->withInput();
    }

    // If the article was successfully updated, redirect to the article's page with a success message
    return redirect()->to("articles/$id")->with("message", "Article Updated.")->with("toastType", "text-bg-success");
  }

  //--------------------------------------------------}


  //{--------------DELETE--------------

  //--FRONTEND PAGE
  public function confirmDelete($id)
  {

    $article = $this->getArticleOr404($id);

    return view("Articles/delete", ["article" => $article]);
  }

  //--BACKEND ACTION
  public function delete($id)
  {



    if (!$this->model->delete($id)) {
      // If the deletion fails, redirect back to the previous page with an error message
      return redirect()->back()->with("message", "Failed to Delete the article")->with("toastType", "text-bg-danger");
    }
    // If the deletion is successful, redirect to the articles index page with a success message
    return redirect()->to("articles")->with("message", "Article Deleted Successfully")->with("toastType", "text-bg-success");



  }

  //--------------------------------------------------}




  //{--------------HELPERS--------------
  private function getArticleOr404($id): Article
  {

    $article = $this->model->find($id);

    if ($article === null) {
      throw new PageNotFoundException("Article with id: $id is Not Found");
    }

    return $article;
  }
  //--------------------------------------------------}
}

