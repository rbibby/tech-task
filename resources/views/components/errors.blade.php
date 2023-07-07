@if ($errors->any())
    <div class="bg-red-200 text-red-700 px-4 py-2 mb-4">
        <p class="mb-2">
            Please correct the following errors:
        </p>
        <ul class="list-disc ml-4">
            @foreach ($errors->all() as $error)
                <li class="float-none text-sm">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
