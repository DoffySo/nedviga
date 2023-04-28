        <script>
            let burgerActive = false;
            document.querySelector('.burger-menu').addEventListener('click', (e) => {
                const open = document.getElementById("burgerOpen"), close = document.getElementById("burgerClose"),phoneMenu = document.querySelector('.phoneMenu')
                if (burgerActive) {
                    open.classList.add("hidden")
                    close.classList.remove("hidden")
                    phoneMenu.classList.add('active')
                } else {
                    open.classList.remove("hidden")
                    close.classList.add("hidden")
                    phoneMenu.classList.remove('active')
                }
                burgerActive = !burgerActive
            })
            const buyEl = document.getElementById('buy'), rentEl = document.getElementById('rent')
            buyEl.checked = true;
            buyEl.addEventListener('input', (e) => {
                document.querySelector('.buyDiv').classList.add('selected')
                document.querySelector('.rentDiv').classList.remove('selected')
            })
            rentEl.addEventListener('input', (e) => {
                document.querySelector('.buyDiv').classList.remove('selected')
                document.querySelector('.rentDiv').classList.add('selected')
            })
        </script>
        </div>
    </body>
</html>