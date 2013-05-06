# Require any additional compass plugins here.
require 'bootstrap-sass'
require 'animate-sass'
require 'animation'

# Set this to the root of your project when deployed:
http_path = "/wp-content/themes/" + File.basename(Dir.getwd)
# http_path = "/" + File.basename(Dir.getwd)
css_dir = "css"
sass_dir = "sass"
images_dir = "images"
javascripts_dir = "js"
fonts_dir = "fonts"

# You can select your preferred output style here (can be overridden via the command line):
# output_style = :expanded or :nested or :compact or :compressed
output_style = :nested

# To enable relative paths to assets via compass helper functions. Uncomment:
# relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
# line_comments = false
line_comments = true

preferred_syntax = :sass

require 'fileutils'
on_stylesheet_saved do |file|
	if File.exists?(file) && File.basename(file) == "style.css"
		puts "Moving: #{file}"
		FileUtils.mv(file, File.dirname(file) + "/../" + File.basename(file))
	end
end