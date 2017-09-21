# Copy autogenerated files into root directory and rename
cp -R SwaggerClient-php/. . || true
rm -rf SwaggerClient-php || true

# Rename references of swagger client to Clever
git grep -l 'Swagger\\Client' -- './*' ':(exclude)override/override.sh' | xargs sed -i "" 's/Swagger\\Client/Clever/g'
git grep -l 'Swagger\\\\Client' -- './*' ':(exclude)override/override.sh' | xargs sed -i "" 's/Swagger\\\\Client/Clever/g'
