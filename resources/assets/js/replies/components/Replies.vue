<template>
    <div>
        <div class="card">
            <div class="card-content">
                <span class="card-title">Ivan Santos {{ replied }}</span>
            </div>
            <blockquote>
                Velit et omnis debitis eum ex. Ea optio rerum quam reiciendis.Similique quibusdam error commodi assumenda. Ullam est nesciunt sunt quos. Illo sed ut aut magni. Possimus veniam sapiente aut nesciunt vel minus.
            </blockquote>
        </div>
        <div class="card">
            <div class="card-content">
                <span class="card-title">Ivan Santos {{ replied }}</span>
            </div>
            <blockquote>
                Velit et omnis debitis eum ex. Ea optio rerum quam reiciendis.Similique quibusdam error commodi assumenda. Ullam est nesciunt sunt quos. Illo sed ut aut magni. Possimus veniam sapiente aut nesciunt vel minus.
            </blockquote>
        </div>
        <div class="card">
            <div class="card-content">
                <span class="card-title">Ivan Santos {{ replied }}</span>
            </div>
            <blockquote>
                Velit et omnis debitis eum ex. Ea optio rerum quam reiciendis.Similique quibusdam error commodi assumenda. Ullam est nesciunt sunt quos. Illo sed ut aut magni. Possimus veniam sapiente aut nesciunt vel minus.
            </blockquote>
        </div>
        <div class="card">
            <div class="card-content">
                <span class="card-title">Ivan Santos {{ replied }}</span>
            </div>
            <blockquote>
                Velit et omnis debitis eum ex. Ea optio rerum quam reiciendis.Similique quibusdam error commodi assumenda. Ullam est nesciunt sunt quos. Illo sed ut aut magni. Possimus veniam sapiente aut nesciunt vel minus.
            </blockquote>
        </div>

        <div class="card grey lighten-4">
            <div class="card-content">
                <span class="card-title">{{ reply }}</span>
                <form>
                    <div class="input-field">
                        <textarea rows="10" :placeholder="yourAnswer" class="materialize-textarea"></textarea>
                    </div>
                    <button type="submit" class="btn red accent-2">{{ send }}</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'replied',
            'reply',
            'yourAnswer',
            'send',
        ]
    }
</script>
