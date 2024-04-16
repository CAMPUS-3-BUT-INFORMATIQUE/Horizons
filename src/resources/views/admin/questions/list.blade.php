
<div role="tablist" class="tabs tabs-lifted m-4">
    @foreach($questions as $question)
        <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="{{$question['category']}}" />
        <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
            <div class="overflow-x-auto">
                <table class="table table-zebra">
                    <thead>
                    <tr>
                        <th>Numéro</th>
                        <th>Question</th>
                        <th>Réponse</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>{{ $question['id'] }}</th>
                        <td>{{ $question['title'] }}</td>
                        <td>{{ $question['answer'] }}</td>
                        <td><button class="bg-blue-700 hover:bg-blue-600 text-white rounded p-2">Suppr</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach
</div>
