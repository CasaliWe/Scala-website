<?php
namespace Repositories;

use Core\Logger;
use Models\Endereco;

class EnderecoRepository {
        // pegando endereco
        public static function getEndereco() {
            return Endereco::where('idendereco', '1')->first();
        }
    
        // atualizando endereco
        public static function update($data) {

            try {
                $updated = Endereco::where('idendereco', '1')->update([
                    'endereco' => $data['endereco'],
                    'bairro' => $data['bairro'],
                    'cidade' => $data['cidade'],
                    'estado' => $data['estado'],
                    'cep' => $data['cep'],
                    'pais' => $data['pais'],
                    'link_maps' => $data['link_maps']
                ]);
        
                // Log de sucesso
                if ($updated) {
                    Logger::log("Endereço atualizado com sucesso: " . json_encode($data), "INFO");
                    return true;
                } else {
                    Logger::log("Erro ao atualizar o endereço. Nenhuma alteração feita.", "ERROR");
                    return false;
                }
        
            } catch (\Exception $e) {
                // Log de erro
                Logger::log("Erro ao atualizar o endereço: " . $e->getMessage(), "ERROR");
                return false;
            }
            
        }
}