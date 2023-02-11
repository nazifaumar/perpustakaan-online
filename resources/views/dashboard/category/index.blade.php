@extends('dashboard.layouts.main')

@section('content')
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
                            <a class="active" href="#">Category Book</a>
                        </li>
                    </ul>
                </div>

                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Category name</h3>
                            <a href="/dashboard/new-category"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M14 16h2v-2h2v-2h-2v-2h-2v2h-2v2h2ZM2 20V4h8l2 2h10v14Zm2-2h16V8h-8.825l-2-2H4Zm0 0V6v2Z"/></svg></a>
                        </div>

                        <table>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Category Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach ($category as $item)
                                <tbody>
                                    <tr>
                                        <th>{{ $item->id }}</th>
                                        <td class="data-title">{{ $item->category_name }} </td>
                                        <td>{{$item->created_at}}</td>
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
@endsection
