<x-template.tool name="Demo Tool">
  <div class="prose" x-data="handleDemo()" x-init="results = []">
    <p>Here is the example:</p>
    <p><a href="#" x-on:click.prevent="request">Request</a></p>

    <ul>
      <template x-for="result in results" x-key="result.id">
        <li x-text="result.name"></li>
      </template>
    </ul>
  </div>

  @push('scripts')
    <script>
      function handleDemo() {
        return {
          results: [],
          request() {
            fetch('https://jsonplaceholder.typicode.com/users', {
              method: 'GET',
              headers: {
                'Content-Type': 'application/json'
              },
            })
              .then(response => response.json())
              .then(data => {
                this.results = data
              })
          }
        }
      }
    </script>
  @endpush
</x-template.tool>
