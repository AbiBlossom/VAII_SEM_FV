window.onload =  function () {
    var comments = new Comments();
    comments.getComments();
    comments.reload();
    document.getElementById('submit').onclick = () => {
        comments.postComment();
    }
}

class Comments {
    constructor() {
        document.getElementById("submit").onclick = () => this.postComment();
    }

    getComments() {
        fetch("?c=vlntr&a=getComments")
            .then(response => response.json())
            .then(data => {
                let html = "";
                for (let comment of data) {
                        html += "<strong>" + comment.email + "</strong>" +
                            "<div>" + comment.text  + " </div>"
                    
                }
                document.getElementById("komentare").innerHTML = html;
            });


    }

    reload() {
        setInterval(() => {
            this.getComments()
        }, 1000);
    }

    postComment() {

        let text = document.getElementById("text").value;
        let email = document.getElementById("email").value;

        if (text.length == 0) {
            alert(" Nezadali ste ziadny text ");
            return;
        }
        fetch("?c=vltr&a=addComment",
            {
                method: 'POST',
                headers: {
                    'Content-Type':'application/x-www-form-urlencoded',
                },
                body:
                    "text=" + text +
                    "&email=" + email

            })
            .then(response => response.json())
            .then(response => {
                if (response == "error") {
                    alert(" Error ");
                }
            }) ;
    }
}