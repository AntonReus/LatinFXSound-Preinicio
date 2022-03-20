let langResourcesArr = {
    "en":{
        "Inicio": "Home",
        "Acerca": "About us",
        "Tex1": "The best"
    },
    "es":{
        "Inicio": "Inicio",
        "Acerca": "Acerca de nosotros",
        "Tex1": "La mejor musica libre de derechos"
    }
};

function changeLanguage(clickedLangChoiceId) {  // 1
        $(function() {  // 2
            $("#greetings-list").children(".greet").each(function() {  // 3
                let currentlyIteratedGreetKey = $(this).attr("key");  // 4
                let localizedValForGreetKey = langResourcesArr[clickedLangChoiceId][currentlyIteratedGreetKey];  // 5
                $(this).text(localizedValForGreetKey);  // 6
            });
        });
};