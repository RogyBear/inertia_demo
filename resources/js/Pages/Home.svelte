<script>
    import Layout from "./Layout.svelte";
    export let message;
</script>

<Layout>
    <h1>Welcome</h1>
    <p>Hello, welcome to your first Inertia app!</p>
    <p>{message}</p>
</Layout>
