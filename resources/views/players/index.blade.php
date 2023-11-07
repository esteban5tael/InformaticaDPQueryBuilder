@extends('layouts.base')

@section('title')
    Users and Players
@endsection

@section('h3')
    Users and Players
@endsection

@section('content')
    <div class="container text-center">
        <div class="card" id="json-data">
            {{ json_encode($players) }}
            {{ json_encode($users) }}

        </div>

    </div>
@endsection
<?php

/* 
<div class="row">
            <div class="col">
                {{-- Users --}}
                <div class="card">
                    <div class="card-header">
                        <div class="card-title text-center">
                            <h3>Users</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-text text-center">
                            {{-- ----------- --}}
                            @forelse ($users as $user)
                                <p>{{ $user->name }} </p>
                            @empty
                                <div class="w-100 text-center">
                                    <h3>No Data...</h3>
                                </div>
                            @endforelse
                            {{-- ----------- --}}

                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="card-text text-center">
                            Users
                        </div>
                    </div>
                </div>
                {{-- Users --}}
            </div>
            <div class="col">
                {{-- Players --}}
                <div class="card">
                    <div class="card-header">
                        <div class="card-title text-center">
                            <h3>Players</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-text text-center">
                            {{-- ----------- --}}
                            <div class="table-responsive">
                                <table class="table table-primary">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Age</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($players as $player)
                                            <tr class="">
                                                <td scope="row">{{ $player->name }} </td>
                                                <td>{{ $player->age }} </td>
                                            </tr>

                                        @empty
                                            <div class="w-100 text-center">
                                                <h3>No Data...</h3>
                                            </div>
                                        @endforelse


                                    </tbody>
                                </table>
                            </div>

                            {{-- ----------- --}}
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="card-text text-center">
                            Players
                        </div>
                    </div>
                </div>
                {{-- Players --}}
            </div>

        </div>
*/

/*  */
?>
