# note: this should never truly be refernced since we are using relative assets


#Folder settings
relative_assets = true      #because we're not working from the root
css_dir = "kirby-2.2.3/assets/css"          #where the CSS will saved
sass_dir = "app/scss"           #where our .scss files are
images_dir = "app/images"    #the folder with your images

preferred_syntax = :scss

output_style = :compact
environment = :development
#environment = :production
sourcemap = (environment == :production) ? false : true