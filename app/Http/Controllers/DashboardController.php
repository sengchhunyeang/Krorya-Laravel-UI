<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $menuItems = [
            ['href' => '#', 'icon' => 'home.svg', 'label' => 'ទំព័រដើម'],
            ['href' => '#', 'icon' => 'explor.svg', 'label' => 'រុករកមុខម្ហូប'],
            ['href' => '#', 'icon' => 'order.svg', 'label' => 'ការកម្មង់ម្ហូប'],
            ['href' => '#', 'icon' => 'add_card.svg', 'label' => 'កន្រ្តកទំនិញម្ហូប'],
            ['href' => '#', 'icon' => 'list_recipe.svg', 'label' => 'បញ្ជីរាយគ្រឿងទេស'],
            ['href' => '#', 'icon' => 'recipe.svg', 'label' => 'រូបមន្តមុខម្ហូប'],
            ['href' => '#', 'icon' => 'draft.svg', 'label' => 'រក្សាទុកសេចក្តីព្រាង'],
            ['href' => '#', 'icon' => 'favorite.svg', 'label' => 'ចំណង់ចំណូលចិត្ត'],
            ['href' => '#', 'icon' => 'setting.svg', 'label' => 'ការកំណត់ផ្សេងៗ'],
        ];

        return view('home', compact('menuItems'));
    }
}
