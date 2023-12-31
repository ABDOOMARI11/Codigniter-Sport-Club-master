<form class="md:container md:mx-auto font-sans bg-gray-100 md:px-64 md:py-8 px-3 py-2" onsubmit="return validateForm()" action="<?= base_url('/create') ?>" method="POST">
    <?= csrf_field() ?>

    <div class="border-b border-gray-900/10 pb-12 ">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where you can receive mail.</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                <div class="mt-2">
                    <input type="text" name="PseudoNom" id="PseudoNom" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-3">
                <label for="Nom" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
                <div class="mt-2">
                    <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Last name</label>
                <div class="mt-2">
                    <input type="text" name="Prenom" id="Prenom" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-3 ">
                <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Gender</label>
                <div class="mt-2">
                    <select id="Sexe" name="Sexe" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option>Male</option>
                        <option>Female</option>
                        <option>NAN</option>
                    </select>
                </div>
            </div>

            <div class="col-span-full">
                <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900">Street address</label>
                <div class="mt-2">
                    <input type="text" name="Adresse" id="Adresse" autocomplete="street-address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-3 sm:col-start-1">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Profession</label>
                <div class="mt-2">
                    <input type="text" name="Profession" id="Profession" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-3   ">
                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Date Naissance</label>
                <div class="mt-2">
                    <input type="date" name="DateNaissance" id="DateNaissance" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                </div>
            </div>


            <div class="sm:col-span-3 ">
                <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                <div class="mt-2">
                    <input type="text" name="Password" id="Password" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                </div>

            </div>
            <div class="sm:col-span-3 ">
                <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">Confime Password</label>
                <div class="mt-2">
                    <input type="text" name="CPassword" id="CPassword" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                </div>
            </div>

        </div>



    </div>
    <button type="submit" class="mt-2 flex w-full justify-center rounded-md bg-orange-300 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white-600">Submit</button>
</form>
<script>
    function validateForm() {
        var password = document.getElementById("Password").value;
        var confirmPassword = document.getElementById("CPassword").value;

        
        if (password !== confirmPassword) {
            alert("Passwords do not match!");
            return false; 
        }

        return true; 
    }
</script>