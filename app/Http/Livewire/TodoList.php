<?php

namespace App\Http\Livewire;

use App\Models\TodoItem;
use Livewire\Component;

class TodoList extends Component
{
    public $todos;
    public $todoText = '';

    public function mount()
    {
        $this->selectTodos();
    }

    public function render()
    {
        return view('livewire.todo-list');
    }

    public function addTodo()
    {
        $todoItem = new TodoItem();
        $todoItem->todo = $this->todoText;
        $todoItem->completed = false;
        $todoItem->save();

        $this->todoText = '';
        $this->selectTodos();
    }

    public function toggleTodo($id)
    {
        $todo = TodoItem::where('id', $id)->first();
        if (!$todo) {
            return;
        }

        $todo->completed = !$todo->completed;
        $todo->save();
        $this->selectTodos();
    }

    public function deleteTodo($id)
    {
        $todo = TodoItem::where('id', $id)->first();
        if (!$todo) {
            return;
        }

        $todo->delete();
        $this->selectTodos();
    }

    public function selectTodos()
    {
        $this->todos = TodoItem::orderBy('completed', 'ASC')->orderBy('created_at','DESC')->get();
    }

    public function clearCompletedTask()
    {
        TodoItem::where('completed',1)->delete();
        $this->selectTodos();
    }

    public function resetTodoList()
    {
        TodoItem::truncate();
        $this->selectTodos();
    }
}
