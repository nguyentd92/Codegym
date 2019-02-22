<?php
namespace Model;

class BorrowOrder {
    public $id;
    public $book_id;
    public $student_id;
    public $borrowdate;
    public $requiredate;
    public $returndate;

    public function BorrowOrder($id,$book_id,$student_id,$borrowdate,$requiredate,$returndate) {
        $this->id = $id;
        $this->book_id = $book_id;
        $this->student_id = $student_id;
        $this->borrowdate = $borrowdate;
        $this->requiredate = $requiredate;
        $this->returndate = $returndate;
    }

}