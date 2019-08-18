@extends('app')

@section('content')
    
    <h2 class="bg-primary text-white p-3 mb-3">{{ $question->question }}</h2>

    @foreach ($answers as $answer)
        <p class="border-bottom pb-3">{{ $answer->answer }}</p>
    @endforeach

    <form class="mt-3" action="/questions/{{ $question->id }}/answers" method="POST">
        @csrf
        
        <div class="form-group">
            <h4 class="bg-primary text-white p-3">Answer the question !</h4>
            <textarea name="answer" class="form-control {{ $errors->has('answer') ? 'is-invalid' : '' }}" required>{{ old('answer') }}</textarea>
            @if ($errors->has('answer'))
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('answer') as $message)
                            <li>{{ $message }}</li>
                        @endforeach    
                    </ul>
                </div>
            @endif
        </div>

        <div class="text-right">
            <button class="btn btn-primary" type="submit">Answer the question</button>
        </div>
    </form>

@endsection