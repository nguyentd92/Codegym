<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;
class Task extends Model
{
    protected $table = 'tasks';

    public function setTask(Request $request) {
        $this->title = $request->inputTitle;
        $this->content = $request->inputContent;
        $this->duedate = $request->inputDueDate;
        $file = $request->inputFile;
        if (!$request->hasFile('inputFile')) {
            $this->image = $file;
        } else {
            $fileName = $this->getMaxId();            
            $fileExtension = $file->getClientOriginalExtension();
            $newFileName = "$fileName.$fileExtension";
            $this->image = $newFileName;
            $request->file('inputFile')->storeAs('public/images', $newFileName);            
        };
        $this->save();
    }

    public function getMaxId() {
        $maxId = DB::table('tasks')->max('id');
        return $maxId + 1;
    }
}
