@extends('app')

@section('content')
    
    <form class="pb-3 border-bottom mb-3 needs-validation" action="/questions" method="POST">
        @csrf
        
        <div class="form-group">
            <textarea name="question" class="form-control {{ $errors->has('question') ? 'is-invalid' : '' }}" placeholder="What are male baby chicks used for in the egg idustry?" required>{{ old('question') }}</textarea>
            @if ($errors->has('question'))
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('question') as $message)
                            <li>{{ $message }}</li>
                        @endforeach    
                    </ul>
                </div>
            @endif
        </div>

        <div class="text-right">
            <button class="btn btn-primary" type="submit">Ask away</button>
        </div>
    </form>

    <h2 class="mb-3 p-3 bg-primary text-white">Questions</h2>

    @foreach ($questions as $question)
        <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3">
            <h3 class="m-0">
                <a href="/questions/{{ $question->id }}" class="text-dark">
                    {{ $question->question }}
                </a>
            </h3>
            <div>
                <span class="badge badge-primary">0 answers</span>
            </div>
        </div>
    @endforeach

@endsection