
            </div>
        </div>
    </div>


    <script>
        
        const adminMenuContainer = document.querySelector('.adminMenuContainer');
        const adminLine1 = document.querySelector('.adminLine1');
        const adminLine2 = document.querySelector('.adminLine2');
        const adminLine3 = document.querySelector('.adminLine3');
        const adminNavOverContainer = document.querySelector('.adminNavOverContainer');
        const adminNavOver = document.querySelector('.adminNavOver');

        adminMenuContainer.addEventListener("click", ()=>{
            console.log('click');
            if (adminMenuContainer.classList.contains("opened")) {
                adminLine2.classList.remove("remove")
                adminLine1.classList.remove("line1Deg")
                adminLine3.classList.remove("line3Deg")
                adminMenuContainer.classList.remove("opened");
                adminNavOverContainer.classList.remove('adminNavOverContainerchange')
                // adminNavOver.classList.remove('adminNavOver')
            } else {
                adminLine2.classList.add("remove");
                adminLine1.classList.add("line1Deg");
                adminLine3.classList.add("line3Deg");
                adminMenuContainer.classList.add("opened");
                adminNavOverContainer.classList.add('adminNavOverContainerchange')
                // adminNavOver.classList.add('adminNavOver')
            }

        });
    </script>

 <script src="assets/js/script.js"></script>
</body>
</html>