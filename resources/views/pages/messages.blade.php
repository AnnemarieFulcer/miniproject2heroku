@extends('layout.default')
@section ('content')

    <div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Sender</th>
                <th scope="col">Message Subject</th>
                <th scope="col"></th>


            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">me@gmailcom</th>
                <td><a class="nav-link" href="/messagedata">URGENT</a>
                </td>
                <td> <form> <button type="submit" class="btn btn-primary mb-2">Delete</button></form></td>
            </tr>
            <tr>
                <th scope="row">you@lmfao.com</th>
                <td><a class="nav-link" href="/messagedata">This is a funny meme</a></td>
                <td><form><button type="submit" class="btn btn-primary mb-2">Delete</button></form></td>


            </tr>
            <tr>
                <th scope="row">mom@answerme.com</th>
                <td><a class="nav-link" href="/messagedata">Why are you ignoring my calls??!!</a></td>
                <td><form> <button type="submit" class="btn btn-primary mb-2">Delete</button></form></td>

            </tr>
            </tbody>
        </table>

@endsection