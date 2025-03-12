<h1>Index page</h1>
<a href="{{ route('create') }}">Add Message</a>

@foreach ($contacts as $contact)
    <p>Name: <strong>{{ $contact->name }}</strong></p>
    <p>Email: <strong>{{ $contact->email }}</strong></p>
    <p>Message: <strong>{{ $contact->message }}</strong></p>
@endforeach