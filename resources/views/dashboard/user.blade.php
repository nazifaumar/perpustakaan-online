@extends('dashboard.layouts.main')

@section('content')
    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Users</a>
                        </li>
                    </ul>
                </div>

                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Users Data</h3>
                            <i class='bx bx-search'></i>
                            <i class='bx bx-filter'></i>
                        </div>

                        <table>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Number Phone</th>
                                </tr>
                            </thead>
                            @foreach ($user as $item)
                                <tbody>
                                    <tr>
                                        <th>{{ $item->id }}</th>
                                        <td class="data-title">{{ $item->name }} </td>
                                        <td class="data-title">{{ $item->email }}</td>
                                        <td class="data-title">{{ $item->address }} </td>
                                        <td class="data-title">{{ $item->tlp }} </td>
                                        <td>{{ $item->created_at }}</td>
                                        <td><span class="status completed">Delete</span></td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->
@endsection
