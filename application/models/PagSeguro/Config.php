<?php

class Config {

    const SANDBOX = TRUE;
    
    const SANDBOX_EMAIL = "financeiro@comidabarata.com.br";
    const PRODUCTION_EMAIL = "financeiro@comidabarata.com.br";
    
    const SANDBOX_TOKEN = "BA453C15C7064A88BBE839432E7C05C2";
    const PRODUCTION_TOKEN = "51874BDA27F84590BE0784E8A7C0786C";

    const SANDBOX_SESSIONS = "https://ws.sandbox.pagseguro.uol.com.br/v2/sessions";
    const PRODUCTION_SESSIONS = "https://ws.pagseguro.uol.com.br/v2/sessions";

    public static function getAuthentication(): array {
        if (Config::SANDBOX === true) {
            return[
                "email" => Config::SANDBOX_EMAIL,
                "token" => Config::SANDBOX_TOKEN
            ];
            
        } else {
            return[
                "email" => Config::PRODUCTION_EMAIL,
                "token" => Config::PRODUCTION_TOKEN
            ];
        }
         
    }
    
    public static function getUrlSession():string{
        return (Config::SANDBOX === true) ? Config::SANDBOX_SESSIONS : Config::PRODUCTION_SESSIONS;
    }

}
