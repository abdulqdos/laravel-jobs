<h2 class="font-bold text-3xl">
    {{ $job->name }}
</h2>

<p>
    Congrats ! Your Job now is live on the website
</p>

<div>
    <a href=" {{ url('/jobs/' . $job->id) }}"> View Your Job </a>
</div>
