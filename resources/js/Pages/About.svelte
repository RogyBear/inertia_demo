<script>
    let title = "Laravel Inertia with Svelte";
    import Layout from "./Layout.svelte";
    export let about;
    export let message;
    export let test;
</script>

<Layout>
    <h1>About -- {title}!</h1>
    <p>{about}</p>
    <p>{message}</p>
    <p>{test}</p>
</Layout>
