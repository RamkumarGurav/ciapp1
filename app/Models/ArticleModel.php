<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
  // Define the database table for this model
  protected $table = "article";

  // Define the fields that are allowed to be mass-assigned
  protected $allowedFields = ["title", "content"];

  // Specify the return type of the query results
  protected $returnType = \App\Entities\Article::class;

  // Define validation rules for input data when inserting or updating records
  protected $validationRules = [
    "title" => "required|max_length[128]", // Title must be required and at most 128 characters long
    "content" => "required", // Content must be required
  ];

  // Define custom validation error messages for specific validation rules
  protected $validationMessages = [
    "title" => [
      "required" => "Please enter a title", // Custom message for required title field
      "max_length" => "{field} must not be more than {param} characters" // Custom message for max_length rule on title
    ],
    "content" => [
      "required" => "Please enter a content", // Custom message for required content field
    ],
  ];
}
