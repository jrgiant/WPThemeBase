set d=%~dp0
start cmd /c "cd %d% && echo %d% && sass --watch style.scss:style.css"
start cmd /c "cd %d% && echo %d% && npm start"
start cmd /c "cd %d% && echo %d% && code ."