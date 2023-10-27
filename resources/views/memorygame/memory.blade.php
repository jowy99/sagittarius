@extends('memorygame.layout')

@section('main')
<div class="flex h-screen items-center justify-center">
    <div class="w-4/12 h-4/12 bg-gray-100 rounded-xl text-center dark:bg-gray-600 p-12 space-y-12 hidden xl:block">
        <h1 class="text-7xl dark:text-white">
            Memory Game
        </h1>
        <table class="border-4 border-pink-400 shadow-xl">
            <tr class="border-4 border-pink-400">
                <td class="border-4 border-pink-400"><button id="0" onclick="uncover(0)" class="border-4 w-32 h-32 text-4xl shadow-xl "></button></td>
                <td class="border-4 border-pink-400"><button id="1" onclick="uncover(1)" class="border-4 w-32 h-32 text-4xl shadow-xl "></button></td>
                <td class="border-4 border-pink-400"><button id="2" onclick="uncover(2)" class="border-4 w-32 h-32 text-4xl shadow-xl "></button></td>
                <td class="border-4 border-pink-400"><button id="3" onclick="uncover(3)" class="border-4 w-32 h-32 text-4xl shadow-xl "></button></td>
            </tr>
            <tr class="border-4 border-pink-400">
                <td class="border-4 border-pink-400"><button id="4" onclick="uncover(4)" class="border-4 w-32 h-32 shadow-xl text-4xl "></button></td>
                <td class="border-4 border-pink-400"><button id="5" onclick="uncover(5)" class="border-4 w-32 h-32 shadow-xl text-4xl "></button></td>
                <td class="border-4 border-pink-400"><button id="6" onclick="uncover(6)" class="border-4 w-32 h-32 shadow-xl text-4xl "></button></td>
                <td class="border-4 border-pink-400"><button id="7" onclick="uncover(7)" class="border-4 w-32 h-32 shadow-xl text-4xl "></button></td>
            </tr>
            <tr class="border-4 border-pink-400">
                <td class="border-4 border-pink-400"><button id="8" onclick="uncover(8)" class="border-4 w-32 h-32 shadow-xl text-4xl "></button></td>
                <td class="border-4 border-pink-400"><button id="9" onclick="uncover(9)" class="border-4 w-32 h-32 shadow-xl text-4xl "></button></td>
                <td class="border-4 border-pink-400"><button id="10" onclick="uncover(10)" class="border-4 w-32 h-32 shadow-xl text-4xl "></button></td>
                <td class="border-4 border-pink-400"><button id="11" onclick="uncover(11)" class="border-4 w-32 h-32 shadow-xl text-4xl "></button></td>
            </tr>
            <tr class="border-4 border-pink-400">
                <td class="border-4 border-pink-400"><button id="12" onclick="uncover(12)" class="border-4 w-32 h-32 shadow-xl text-4xl "></button></td>
                <td class="border-4 border-pink-400"><button id="13" onclick="uncover(13)" class="border-4 w-32 h-32 shadow-xl text-4xl "></button></td>
                <td class="border-4 border-pink-400"><button id="14" onclick="uncover(14)" class="border-4 w-32 h-32 shadow-xl text-4xl "></button></td>
                <td class="border-4 border-pink-400"><button id="15" onclick="uncover(15)" class="border-4 w-32 h-32 shadow-xl text-4xl "></button></td>
            </tr>
        </table>
        <div>
            <p>Designed By <span><a href="https://github.com/jowy99" class="hover:text-pink-500">Sagittarius</a></span></p>
        </div>
    </div>
    <div class="w-3/12 h-4/12 bg-gray-100 rounded-r-xl text-center dark:bg-gray-600 p-8 space-y-12 hidden xl:block">
        <!--        <h2 id="difficulty" class="text-4xl underline">Difficulty</h2>-->
        <h2 id="hits" class="text-4xl">Hits: 0</h2>
        <h2 id="time-left" class="text-4xl">Time: 30 seconds.</h2>
        <h2 id="movements" class="text-4xl">Movements: 0</h2>
        <!--        <div class="space-x-4">-->
        <!--          <button id="easy" name="easy" class="border-4 bg-blue-500 py-2 px-8 rounded-lg" onclick="modeManagement()">Easy</button>-->
        <!--          <button id="normal" name="normal" class="border-4 bg-amber-500 py-2 px-8 rounded-lg" onclick="modeManagement()">Normal</button>-->
        <!--          <button id="hard" name="hard" class="border-4 bg-red-500 py-2 px-8 rounded-lg" onclick="modeManagement()">Hard</button>-->
        <!--        </div>-->
    </div>
    <div class="block xl:hidden">
        <div class="w-4/12 h-4/12 bg-gray-100 rounded-xl text-center dark:bg-gray-600 p-12 space-y-12">
            <h2>Not working</h2>
        </div>
    </div>
</div>
@endsection
