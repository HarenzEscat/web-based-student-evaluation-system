@extends('layout.app')

@section('content')

    <style>
        h1{
            text-align: center;
            font-family: Algerian; 
            font-size: 100px;
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .row{
            align-items: center;
            justify-content: center;
            padding-bottom: 0.5rem;
        }

        .bn5{
            padding: 0.6em 2em;
            border: none;
            outline: none;
            color: rgb(255, 255, 255);
            background: #111;
            cursor: pointer;
            position: relative;
            z-index: 0;
            border-radius: 10px;
        }

        .bn5:before{
            content: "";
            background: linear-gradient(
                45deg,
                #ff0000,
                #ff7300,
                #fffb00,
                #48ff00,
                #00ffd5,
                #002bff,
                #7a00ff,
                #ff00c8,
                #ff0000
            );
            position: absolute;
            top: -2px;
            left: -2px;
            background-size: 400%;
            z-index: -1;
            filter: blur(5px);
            width: calc(100% + 4px);
            height: calc(100% + 4px);
            animation: glowingbn5 20s linear infinite;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
            border-radius: 10px;
        }

        @keyframes glowingbn5 {
            0% {
                background-position: 0 0;
            }
            50% {
                background-position: 400% 0;
            }
            100% {
                background-position: 0 0;
            }
        }

        .bn5:active{
            color: #000;
        }

        .bn5:active:after{
            background: transparent;
        }

        .bn5:hover:before{
            opacity: 1;
        }

        .bn5:after{
            z-index: -1;
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: #191919;
            left: 0;
            top: 0;
            border-radius: 10px;
        }
        
    </style>

    <h1>Registration Page</h1>

    <form action="{{route('register')}}" method="post">
        @csrf
        <div class="row">
            <input type="text" name="name" id="name" placeholder="Name">
            <label for="name">
                @error('name')
                    <span style="color:red">{{$message}}</span>
                @enderror
            </label>
            
        </div>
        <div class="row">
            <input type="text" name="username" id="username" placeholder="Username">
            <label for="username">
                @error('username')
                    <span style="color:red">{{$message}}</span>
                @enderror
            </label>
            
        </div>
        <div class="row">
            <input type="password" name="password" id="password" placeholder="Password">
            <label for="password">
                @error('password')
                    <span style="color:red">{{$message}}</span>
                @enderror
            </label>
            
        </div>

        <div class="row">
            <button class="bn5">Submit</button>
        </div>
    </form>

@endsection

@section('title')
    Registration
@endsection